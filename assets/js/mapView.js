$(document).ready(function () {
  const map = document.querySelector("#mapView");
  const articles = map.querySelectorAll(".map_stat nav a");
  const classesTab = [
    "countryActive",
    "countryArticleLeActive",
    "countryArticleLaActive",
    "countryArticleLActive",
    "countryArticleLesActive",
    "countryArticleActive",
  ];

  async function loadTotalCount() {
    const data = await getData("all");
    removeClassesFromPaths(classesTab);
    addClassToPaths(data, "all");
  }

  function getRightEndpoint(article) {
    if (
      article == "le" ||
      article == "la" ||
      article == "les" ||
      article == "l"
    ) {
      return `${API_ENDPOINT}/countries/articles/${article}`;
    } else if (article == "undifined") {
      return `${API_ENDPOINT}/countries/articles`;
    }
    return `${API_ENDPOINT}/countries`;
  }

  function getCurrentClasse(article) {
    if (
      article == "le" ||
      article == "la" ||
      article == "les" ||
      article == "l"
    ) {
      return `countryArticle${article.charAt(0).toUpperCase()}${article.slice(
        1,
        3
      )}Active`;
    } else if (article == "all") {
      return "countryActive";
    }
    return `countryArticleActive`;
  }

  function deactivateAllTabs() {
    document.querySelectorAll(".map_stat nav a").forEach(function (tab) {
      tab.classList.remove("tab-active");
    });
  }

  function activateTab(tab) {
    tab.classList.add("tab-active");
  }

  async function getData(article) {
    const rightEndpoint = getRightEndpoint(article);
    const response = await Fetch.get(rightEndpoint);
    return response.countries == undefined ? response : response.countries;
  }

  function removeClassesFromPaths(classes) {
    document.querySelectorAll("path").forEach(function (path) {
      classes.forEach(function (classe) {
        if (path.classList.contains(classe)) {
          path.classList.remove(classe);
        }
      });
    });
  }

  function addClassToPaths(data, article) {
    const path = document.querySelectorAll("path");
    path.forEach(function (path) {
      data.forEach(function (country) {
        const id = $(path).attr("id");
        if (country.flag == id) {
          let classToAdd = getCurrentClasse(article);
          console.log(classToAdd);
          path.classList.add(classToAdd);
        }
      });
    });
  }

  articles.forEach(function (article) {
    article.addEventListener("click", async function (e) {
      deactivateAllTabs();
      activateTab(this);
      const selectedArticle = this.id;
      const data = await getData(selectedArticle);
      removeClassesFromPaths(classesTab);
      addClassToPaths(data, selectedArticle);
    });
  });

  loadTotalCount();
});
