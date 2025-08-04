import 'bootstrap/dist/js/bootstrap.bundle.min.js';
const translations = {
    fr : "C:\\Users\\hp\\Application-Marketplace\\resources\\lang\\fr.json",
    ar : "C:\\Users\\hp\\Application-Marketplace\\resources\\lang\\ar.json",
};

function changeLanguage(lang) {
    document.documentElement.lang = lang;
    document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';

    document.title = translations[lang].title;

    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        if (translations[lang][key]) {
            if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
                element.placeholder = translations[lang][key];
            } else {
                element.textContent = translations[lang][key];
            }
        }
    });

    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(`lang-${lang}`).classList.add('active');

    localStorage.setItem('preferredLanguage', lang);
}

document.addEventListener('DOMContentLoaded', () => {
    const savedLang = localStorage.getItem('preferredLanguage') || 'fr';
    changeLanguage(savedLang);

    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const lang = btn.id.split('-')[1];
            changeLanguage(lang);
        });
    });
});

