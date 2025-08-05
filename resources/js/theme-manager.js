class ThemeManager {
  constructor() {
    this.currentTheme = localStorage.getItem("theme") || "light"
    this.currentLanguage = "en" // Declare currentLanguage variable
    this.translations = {
      en: {
        "theme.dark": "Dark Mode",
        "theme.light": "Light Mode",
      },
      fr: {
        "theme.dark": "Mode sombre",
        "theme.light": "Mode clair",
      },
    } // Declare translations variable
    this.init()
  }

  init() {
    this.applyTheme(this.currentTheme)
    this.createThemeToggle()
    this.updateThemeToggle()
  }

  applyTheme(theme) {
    document.documentElement.setAttribute("data-theme", theme)

    if (theme === "dark") {
      document.documentElement.style.setProperty("--bs-body-bg", "#0f1419")
      document.documentElement.style.setProperty("--bs-body-color", "#e2e8f0")
      document.documentElement.style.setProperty("--bs-card-bg", "#1a202c")
      document.documentElement.style.setProperty("--bs-border-color", "#2d3748")
      document.documentElement.style.setProperty("--primary-green", "#48cc6c")
      document.documentElement.style.setProperty("--primary-green-dark", "#38a169")
      document.documentElement.style.setProperty("--primary-green-light", "#68d391")
      document.documentElement.style.setProperty("--secondary-green", "#276749")
      document.documentElement.style.setProperty("--accent-green", "#9ae6b4")
    } else {
      document.documentElement.style.setProperty("--bs-body-bg", "#ffffff")
      document.documentElement.style.setProperty("--bs-body-color", "#1a202c")
      document.documentElement.style.setProperty("--bs-card-bg", "#ffffff")
      document.documentElement.style.setProperty("--bs-border-color", "#e2e8f0")
      document.documentElement.style.setProperty("--primary-green", "#38a169")
      document.documentElement.style.setProperty("--primary-green-dark", "#2f855a")
      document.documentElement.style.setProperty("--primary-green-light", "#48bb78")
      document.documentElement.style.setProperty("--secondary-green", "#68d391")
      document.documentElement.style.setProperty("--accent-green", "#c6f6d5")
    }

    this.currentTheme = theme
    localStorage.setItem("theme", theme)
  }

  toggleTheme() {
    const newTheme = this.currentTheme === "light" ? "dark" : "light"
    this.applyTheme(newTheme)
    this.updateThemeToggle()
  }

  createThemeToggle() {
    const themeToggle = document.createElement("button")
    themeToggle.id = "theme-toggle"
    themeToggle.className = "btn btn-outline-success position-fixed"
    themeToggle.style.cssText = "top: 20px; right: 20px; z-index: 1050; border-radius: 50%; width: 50px; height: 50px;"
    themeToggle.onclick = () => this.toggleTheme()

    document.body.appendChild(themeToggle)
  }

  updateThemeToggle() {
    const toggle = document.getElementById("theme-toggle")
    if (toggle) {
      toggle.innerHTML = this.currentTheme === "light" ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>'
      toggle.title =
        this.currentTheme === "light"
          ? this.translations[this.currentLanguage]["theme.dark"] || "Mode sombre"
          : this.translations[this.currentLanguage]["theme.light"] || "Mode clair"
    }
  }
}

// Initialiser le gestionnaire de thème
document.addEventListener("DOMContentLoaded", () => {
  new ThemeManager()
})
