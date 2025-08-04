// Système de traduction simple
const translations = {
  fr: {
    "site.title": "Marketplace Coopérative",
    "site.name": "CoopMarket",
    "site.tagline": "Marketplace Coopérative",
    "contact.phone": "+212 123 456 789",
    "contact.email": "contact@marketplace.ma",
    "search.placeholder": "Rechercher des produits, coopératives...",
    "search.button": "Rechercher",
    "nav.account": "Mon Compte",
    "nav.login": "Se connecter",
    "nav.register": "S'inscrire",
    "nav.dashboard": "Tableau de bord",
    "nav.profile": "Mon Profil",
    "nav.orders": "Mes Commandes",
    "nav.logout": "Déconnexion",
    "nav.home": "Accueil",
    "nav.products": "Produits",
    "nav.cooperatives": "Coopératives",
    "nav.categories": "Catégories",
    "nav.about": "À propos",
    "nav.contact": "Contact",
    "footer.description":
      "Plateforme dédiée aux coopératives marocaines pour promouvoir leurs produits locaux et authentiques.",
    "footer.quick_links": "Liens Rapides",
    "footer.customer_service": "Service Client",
    "footer.help": "Aide",
    "footer.shipping": "Livraison",
    "footer.returns": "Retours",
    "footer.faq": "FAQ",
    "footer.contact": "Contact",
    "footer.rights": "Tous droits réservés.",
    "footer.privacy": "Confidentialité",
    "footer.terms": "Conditions",
    "footer.cookies": "Cookies",
  },
  ar: {
    "site.title": "سوق التعاونيات",
    "site.name": "كوب ماركت",
    "site.tagline": "سوق التعاونيات",
    "contact.phone": "+212 123 456 789",
    "contact.email": "contact@marketplace.ma",
    "search.placeholder": "البحث عن المنتجات والتعاونيات...",
    "search.button": "بحث",
    "nav.account": "حسابي",
    "nav.login": "تسجيل الدخول",
    "nav.register": "إنشاء حساب",
    "nav.dashboard": "لوحة التحكم",
    "nav.profile": "الملف الشخصي",
    "nav.orders": "طلباتي",
    "nav.logout": "تسجيل الخروج",
    "nav.home": "الرئيسية",
    "nav.products": "المنتجات",
    "nav.cooperatives": "التعاونيات",
    "nav.categories": "الفئات",
    "nav.about": "حول",
    "nav.contact": "اتصل بنا",
    "footer.description": "منصة مخصصة للتعاونيات المغربية لترويج منتجاتها المحلية والأصيلة.",
    "footer.quick_links": "روابط سريعة",
    "footer.customer_service": "خدمة العملاء",
    "footer.help": "مساعدة",
    "footer.shipping": "الشحن",
    "footer.returns": "المرتجعات",
    "footer.faq": "الأسئلة الشائعة",
    "footer.contact": "اتصل بنا",
    "footer.rights": "جميع الحقوق محفوظة.",
    "footer.privacy": "الخصوصية",
    "footer.terms": "الشروط",
    "footer.cookies": "ملفات تعريف الارتباط",
  },
  en: {
    "site.title": "Cooperative Marketplace",
    "site.name": "CoopMarket",
    "site.tagline": "Cooperative Marketplace",
    "contact.phone": "+212 123 456 789",
    "contact.email": "contact@marketplace.ma",
    "search.placeholder": "Search for products, cooperatives...",
    "search.button": "Search",
    "nav.account": "My Account",
    "nav.login": "Login",
    "nav.register": "Register",
    "nav.dashboard": "Dashboard",
    "nav.profile": "My Profile",
    "nav.orders": "My Orders",
    "nav.logout": "Logout",
    "nav.home": "Home",
    "nav.products": "Products",
    "nav.cooperatives": "Cooperatives",
    "nav.categories": "Categories",
    "nav.about": "About",
    "nav.contact": "Contact",
    "footer.description": "Platform dedicated to Moroccan cooperatives to promote their local and authentic products.",
    "footer.quick_links": "Quick Links",
    "footer.customer_service": "Customer Service",
    "footer.help": "Help",
    "footer.shipping": "Shipping",
    "footer.returns": "Returns",
    "footer.faq": "FAQ",
    "footer.contact": "Contact",
    "footer.rights": "All rights reserved.",
    "footer.privacy": "Privacy",
    "footer.terms": "Terms",
    "footer.cookies": "Cookies",
  },
}

let currentLanguage = "fr"

// Fonction pour changer la langue
function changeLanguage(lang) {
  currentLanguage = lang
  document.getElementById("current-lang").textContent = lang.toUpperCase()

  // Changer la direction pour l'arabe
  if (lang === "ar") {
    document.documentElement.setAttribute("dir", "rtl")
    document.documentElement.setAttribute("lang", "ar")
  } else {
    document.documentElement.setAttribute("dir", "ltr")
    document.documentElement.setAttribute("lang", lang)
  }

  // Traduire tous les éléments
  translatePage()

  // Sauvegarder la préférence
  localStorage.setItem("preferred-language", lang)
}

// Fonction pour traduire la page
function translatePage() {
  const elements = document.querySelectorAll("[data-translate]")
  elements.forEach((element) => {
    const key = element.getAttribute("data-translate")
    if (translations[currentLanguage] && translations[currentLanguage][key]) {
      element.textContent = translations[currentLanguage][key]
    }
  })

  // Traduire les placeholders
  const placeholderElements = document.querySelectorAll("[data-translate-placeholder]")
  placeholderElements.forEach((element) => {
    const key = element.getAttribute("data-translate-placeholder")
    if (translations[currentLanguage] && translations[currentLanguage][key]) {
      element.setAttribute("placeholder", translations[currentLanguage][key])
    }
  })
}

// Initialiser la traduction au chargement de la page
document.addEventListener("DOMContentLoaded", () => {
  // Récupérer la langue préférée
  const savedLanguage = localStorage.getItem("preferred-language")
  if (savedLanguage && translations[savedLanguage]) {
    changeLanguage(savedLanguage)
  } else {
    translatePage()
  }
})
