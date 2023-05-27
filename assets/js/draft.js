try {
    // add loader
    Loader.small("#totalCountries");
    Loader.small("#totalCountriesArticleLe");
    Loader.small("#totalCountriesArticleLa");
    Loader.small("#totalCountriesArticleLes");
    Loader.small("#totalCountriesArticleL");
    Loader.small("#totalCountriesArticle");

    // make request
    const urls = [
        `${API_ENDPOINT}/countries/count`,
        `${API_ENDPOINT}/countries/articles/Le/count`,
        `${API_ENDPOINT}/countries/articles/La/count`,
        `${API_ENDPOINT}/countries/articles/Les/count`,
        `${API_ENDPOINT}/countries/articles/L/count`,
        `${API_ENDPOINT}/countries/count/articles`
    ];
      const data = await Fetch.gets(urls);
      displayCountDashboard(data);
    } catch (error) {
      Loader.stop("#totalCountries",0);
      Loader.stop("#totalCountriesArticleLe",0);
      Loader.stop("#totalCountriesArticleLa",0);
      Loader.stop("#totalCountriesArticleLes",0);
      Loader.stop("#totalCountriesArticleL",0);
      Loader.stop("#totalCountriesArticle",0);
      alert("Une error est arrivé lors de la recuperation des données sur le serveur");
    }