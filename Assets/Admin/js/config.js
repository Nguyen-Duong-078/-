"use strict";
let config = {
    colors: {
      primary: "#9055fd",
      secondary: "#8a8d93",
      success: "#56ca00",
      info: "#16b1ff",
      warning: "#ffb400",
      danger: "#ff4c51",
      dark: "#4b4b4b",
      black: "#3a3541",
      white: "#fff",
      cardColor: "#fff",
      bodyBg: "#f4f5fa",
      bodyColor: "#89868d",
      headingColor: "#544f5a",
      textMuted: "#b4b2b7",
      borderColor: "#e7e7e8",
      chartBgColor: "#F0F2F8",
    },
    colors_label: {
      primary: "#9055fd1f",
      secondary: "#8a8d931f",
      success: "#56ca001f",
      info: "#16b1ff1f",
      warning: "#ffb4001f",
      danger: "#ff4c511f",
      dark: "#4b4b4b1f",
    },
    colors_dark: {
      cardColor: "#312d4b",
      bodyBg: "#28243d",
      bodyColor: "#9e9ab5",
      headingColor: "#cfcbe5",
      textMuted: "#76728e",
      borderColor: "#474360",
      chartBgColor: "#474360",
    },
    enableMenuLocalStorage: !0,
  },
  assetsPath = document.documentElement.getAttribute("data-assets-path"),
  templateName = document.documentElement.getAttribute("data-template"),
  rtlSupport = !0;
"undefined" != typeof TemplateCustomizer &&
  (window.templateCustomizer = new TemplateCustomizer({
    cssPath: assetsPath + "vendor/css" + (rtlSupport ? "/rtl" : "") + "/",
    themesPath: assetsPath + "vendor/css" + (rtlSupport ? "/rtl" : "") + "/",
    displayCustomizer: !0,
    lang:
      localStorage.getItem("templateCustomizer-" + templateName + "--Lang") ||
      "en",
    controls: [
      "rtl",
      "style",
      "headerType",
      "contentLayout",
      "layoutCollapsed",
      "layoutNavbarOptions",
      "themes",
    ],
  }));
