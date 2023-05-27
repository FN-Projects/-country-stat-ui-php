const API_ENDPOINT = "https://country-stat-rest-api.onrender.com/api/country/stats"

class Fetch {
  static async get(url) {
    try {
      const response = await fetch(url);
      const data = await response.json();
      return data;
    } catch (error) {
      throw new Error("Error occured when trying get data : " + error.message);
    }
  }

  static async gets(urls) {
    const requests = urls.map((url) => fetch(url));
    const responses = await Promise.all(requests);
    const data = await Promise.all(
      responses.map((response) => response.json())
    );
    return data;
  }
}

class Loader {
  
  static display(selector, isApp = true) {
    let addColor = isApp == false ? "white" : "app";
    $(`${selector}`).prepend(`<div id="loader" class="spinner-border mx-auto text-center mt-5 p-5 text-${addColor}"></div>`);
  }

  static small(selector) {
    $(selector).html(`<div id="smallLoader" class="spinner-border text-app"></div>`);
  }

  static remove() {
    $("#loader").remove();
  }

  static stop(selector,message) {
    $(selector).html(message);
  }

  static removeSmall() {
    $("#smallLoader").remove();
  }

  static hide(selector) {
    $(selector).addClass("d-none");
    console.log("Add class d-none on " + selector);
  }

  static show(selector) {
    $(selector).removeClass("d-none");
  }
}


class Counter {

    static display(selector, number) {
        $(selector).html(`| ${number} `); 
    }

    static dashboard(selector,number){
        $(selector).text(number); 

    }
 
}