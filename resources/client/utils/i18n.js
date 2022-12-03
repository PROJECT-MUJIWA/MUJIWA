export default function useI18n(key, replacement = {})
{
    if(!'_translations' in window || window._translations !== null) throw Error('Funkci nelze použít, není definován _translations v globálním window');

    let translation = window._translations[key] || key;

    Object.keys(replacement).forEach(r => {
        translation = translation.replace(`${r}`, replacement[r]);
    });

    return translation;
}
