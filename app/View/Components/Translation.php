<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class Translation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Map PHP Language Function
     *
     * @param $lang string
     * @return array
     */
    protected function mapPHPLanguage(string $lang): array
    {
        return collect(File::allFiles(lang_path($lang)))
            ->filter(function ($file){
                return $file->getExtension() === "php";
            })->flatMap(function ($file){
                return Arr::dot(File::getRequire($file->getRealPath()));
            })->toArray();
    }

    /**
     * Map JSON Language Function
     *
     * @param $lang string
     * @return array
     */
    protected function mapJSONLanguage(string $lang): array
    {
        return json_decode(File::get(lang_path("$lang.json")), true);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $locale = App::getLocale();

        $phpTranslation = [];
        $jsonTranslation = [];

        if(File::exists(lang_path($locale)))
        {
            $phpTranslation = $this->mapPHPLanguage($locale);
        }

        if(!File::exists(lang_path($locale)))
        {
            $phpTranslation = $this->mapPHPLanguage('en');
        }

        if(File::exists(lang_path("$locale.json")))
        {
            $jsonTranslation = $this->mapJSONLanguage($locale);
        }

        $translations = array_merge($phpTranslation, $jsonTranslation);

        return view('components.translation', [
            'translations' => $translations
        ]);
    }
}
