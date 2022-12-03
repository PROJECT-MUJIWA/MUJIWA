export default function (key, replacement = {})
{
    let translation = window._translations[key] || key;

    Object.keys(replacement).forEach(r => {
        translation = translation.replace(`:${r}`, replacement[r]);
    });

    return translation;
}
