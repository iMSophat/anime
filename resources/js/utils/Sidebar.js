// import SimpleBar from "../plugins/SimpleBar";
// import SimpleBar from "simplebar";
const initialize = () => {
    initializeSidebarCollapse();
}
const initializeSidebarCollapse = () => {
    const sidebarElement = document.getElementsByClassName("js-sidebar")[0];
    const sidebarToggleElement = document.getElementsByClassName("js-sidebar-toggle")[0];
    const cardSection = document.getElementById("video-card-section");
  
    if(sidebarElement && sidebarToggleElement) {
        sidebarToggleElement.addEventListener("click", () => {
            sidebarElement.classList.toggle("collapsed");
            cardSection.classList.toggle('xl:grid-cols-5')
            sidebarElement.addEventListener("transitionend", () => {
                window.dispatchEvent(new Event("resize"));
            });
        });
    }
}
  
// Wait until page is loaded
document.addEventListener("DOMContentLoaded", () => initialize());