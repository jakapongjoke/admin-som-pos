// image preview
const brandLogo = document.querySelector(".brandLogo");
const imagePreview = document.querySelector(".page-form__img-preview");
// initially call the function for the first form
// imagePreviewFun(brandLogo, imagePreview);
// image preview function
// function imagePreviewFun(fileInput, imgPreviewBox) {
//   fileInput.addEventListener("change", (event) => {
//     const file = event.target.files[0];
//     if (file) {
//       imgPreviewBox.src = URL.createObjectURL(file);
//       imgPreviewBox.style.display = "block";
//     }
//   });
// }

// tab functionality
const addIcon = document.querySelector(".page-form__add-wrapper.tab");
const formWrapper = document.querySelector(".page-form__form-wrapper");
const form = document.querySelector(".page-form__form");
const tabWrapper = document.querySelector(".page-form__tabs-wrapper");
const tabContainer = document.querySelector(".page-form__tabs");
const tab = document.querySelector(".page-form__tab");
const closeIcon = document.querySelector(".page-form__cross-wrapper");
const cloneFormFirstCopy = form.cloneNode(true);

// set the inital value of tab index
let tabIndex = 1;
// new tab add event
function addTab(form_id,id){

  // generate a unique id for new tab, this unique id will be set in tab button, tab cross icon and form in order to make a relation between them
  const uniqueID = form_id;

  // hide all existing form in order to add a new form
  const allForms = document.querySelectorAll(".page-form__form");
  allForms.forEach((form) => {
    form.style.display = "none";
  });

  // clone form and do some changes and use it as a new form
  const cloneFormXerox = cloneFormFirstCopy.cloneNode(true);
  cloneFormXerox.setAttribute("data-unique-id", uniqueID);
  cloneFormXerox.style.display = "flex";
  cloneFormXerox.classList.remove('head_office')
  cloneFormXerox.classList.add('branch')

  formWrapper.appendChild(cloneFormXerox);

  // add the country phone code value in input field
  const selectElement = cloneFormXerox.querySelector(".country-code");
  CountryCode(selectElement);

  // add unque id in file id and label-for to make a relation
  const uniqueIdForInp = Date.now().toString();
  cloneFormXerox.querySelector(".brandLogo").setAttribute("id", uniqueIdForInp);
  if(id!=""){
  cloneFormXerox.querySelector(".id").value = id
  }
  cloneFormXerox
    .querySelector(".logo-inp-label")
    .setAttribute("for", uniqueIdForInp);

  // add image preview function in input file
  const inpFile = cloneFormXerox.querySelector(".brandLogo");
  const imgPreview = cloneFormXerox.querySelector(".page-form__img-preview");
  // imagePreviewFun(inpFile, imgPreview);

  // clone tab and use it as a new tab
  const cloneTab = tab.cloneNode(true);
  tabContainer.appendChild(cloneTab);
  // remove active class from previous active tab and set active in new tab
  tabWrapper.querySelector(".active").classList.remove("active");
  cloneTab.classList.add("active");
  // add a unique id in tab
  cloneTab.setAttribute("data-unique-id", uniqueID);
  // add a eventlistener in tab button
  cloneTab.addEventListener("click", tabFunction);
  // set the branch name with index number
  cloneTab.querySelector("span").innerHTML = '<span class="branch_tab_number">'+ tabIndex++ +'.</span>'+ "<span class='branch_name_tab_text'>Branch</span>";
  cloneTab.classList.remove('head_branch_tab')

  // close icon used to close a tab
  const closeIcon = cloneTab.querySelector(".page-form__cross-wrapper");
  // display the cross button, because its initialy hidden
  closeIcon.style.display = "flex";
  // add a event listener to cross button to close a tab
  closeIcon.addEventListener("click", tabCloseFunction);
  // add a unique id in cross button
  closeIcon.setAttribute("data-unique-id", uniqueID);

  // when the tab overflow, scroll positiona always will be in the right by default
  tabContainer.scrollTo(tabContainer.scrollWidth, 0);

}
// set inital tab event
tab.addEventListener("click", tabFunction);
// tab function
function tabFunction(event) {




  
  // at first remove previous active tab and set the current tab as active
  tabWrapper.querySelector(".active").classList.remove("active");
  event.currentTarget.classList.add("active");
  // fetch the tab unique id
  const tabUniqueId = event.currentTarget.getAttribute("data-unique-id");
  // go through all form to check which is corresponding form for the current tab
  const allForms = document.querySelectorAll(".page-form__form");
  
  
  allForms.forEach((form) => {
    // fetch the form unique id
    const formUniqueId = form.getAttribute("data-unique-id");
    // if form unique id and tab unique id match that means that is the corresponding form for the active tab
    if (tabUniqueId == formUniqueId) {
      // only visiable the current tab form
      form.style.display = "flex";
    } else {
      // and hide rest of the forms
      form.style.display = "none";
    }
  });




}
// tab close function
function tabCloseFunction(event) {
  event.stopPropagation();
  // fetch the cross button unique id
  const crossUniqueId = event.currentTarget.getAttribute("data-unique-id");
  // go through all form and check which is the corresponding form for the close tab button that was clicked
  const allForms = document.querySelectorAll(".page-form__form");
  allForms.forEach((form) => {
    // fetch the form unique id
    const formUniqueId = form.getAttribute("data-unique-id");
    // if form unique id and cross unique id match that means this the form that we need to close
    if (formUniqueId == crossUniqueId) {
      // if active tab is closed then previous form will display
      if (form.style.display != "none") {
        form.previousElementSibling.style.display = "flex";
        form.remove();
      }
    }
  });

  // remove the tab button from tab bar when close the a specific tab
  const allTabButtons = document.querySelectorAll(".page-form__tab");
  allTabButtons.forEach((tab) => {
    const tabUniqueId = tab.getAttribute("data-unique-id");
    // if tab unique id and cross unique id match that means this tab will be closed
    if (tabUniqueId == crossUniqueId) {
      // if active tab is closed then active class will be passed to the previous tab
      if (tab.classList.contains("active")) {
        tab.previousElementSibling.classList.add("active");
      }
      tab.remove();
    }
  });
}

// country code with country name
const countryCodeSelect = document.querySelector(".country-code");
// initially call the function for the first form
CountryCode(countryCodeSelect);
// function code provider function
function CountryCode(selectElement) {
  fetch(window.location.origin+"/js/country_phone_code.json")
    .then((response) => response.json())
    .then((data) => {
      data.forEach((country) => {
        const option = document.createElement("option");
        option.value = country.dial_code;
        option.text = country.dial_code + " " + country.name;
        selectElement.appendChild(option);
      });
    })
    .catch((error) => {});
}

// scroll on mouse wheel
tabContainer.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  tabContainer.style.scrollBehavior = "smooth";
  tabContainer.scrollLeft += evt.deltaY;
});
