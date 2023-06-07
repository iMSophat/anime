/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _utils_Sidebar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./utils/Sidebar */ "./resources/js/utils/Sidebar.js");
/* harmony import */ var _utils_Sidebar__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_utils_Sidebar__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _utils_Player__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./utils/Player */ "./resources/js/utils/Player.js");
/* harmony import */ var _utils_Player__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_utils_Player__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./resources/js/utils/Player.js":
/*!**************************************!*\
  !*** ./resources/js/utils/Player.js ***!
  \**************************************/
/***/ (() => {

var playPauseBtn = document.querySelector(".play-pause-btn");
var theaterBtn = document.querySelector(".theater-btn");
var fullScreenBtn = document.querySelector(".full-screen-btn");
var miniPlayerBtn = document.querySelector(".mini-player-btn");
var muteBtn = document.querySelector(".mute-btn");
var captionsBtn = document.querySelector(".captions-btn");
var speedBtn = document.querySelector(".speed-btn");
var currentTimeElem = document.querySelector(".current-time");
var totalTimeElem = document.querySelector(".total-time");
var previewImg = document.querySelector(".preview-img");
var thumbnailImg = document.querySelector(".thumbnail-img");
var volumeSlider = document.querySelector(".volume-slider");
var videoContainer = document.querySelector(".video-container");
var timelineContainer = document.querySelector(".timeline-container");
var video = document.getElementById("video");
if (playPauseBtn != null || theaterBtn != null || fullScreenBtn != null || miniPlayerBtn != null || muteBtn != null || captionsBtn != null || speedBtn != null || currentTimeElem != null || totalTimeElem != null || previewImg != null || thumbnailImg != null || volumeSlider != null || videoContainer != null || timelineContainer != null || video != null) {
  var toggleScrubbing = function toggleScrubbing(e) {
    if (!timelineContainer) return;
    var rect = timelineContainer.getBoundingClientRect();
    var percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width;
    isScrubbing = (e.buttons & 1) === 1;
    videoContainer.classList.toggle("scrubbing", isScrubbing);
    if (isScrubbing) {
      wasPaused = video.paused;
      video.pause();
    } else {
      video.currentTime = percent * video.duration;
      if (!wasPaused) video.play();
    }
    handleTimelineUpdate(e);
  };
  var handleTimelineUpdate = function handleTimelineUpdate(e) {
    if (!timelineContainer) return;
    var rect = timelineContainer.getBoundingClientRect();
    var percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width;
    var previewImgNumber = Math.max(1, Math.floor(percent * video.duration / 10));
    var previewImgSrc = "".concat(window.origin, "/assets/preview/preview-").concat(previewImgNumber, ".jpg");
    previewImg.src = previewImgSrc;
    if (!timelineContainer) return;
    timelineContainer.style.setProperty("--preview-position", percent);
    if (isScrubbing) {
      e.preventDefault();
      thumbnailImg.src = previewImgSrc;
      if (!timelineContainer) return;
      timelineContainer.style.setProperty("--progress-position", percent);
    }
  }; // Playback Speed
  var changePlaybackSpeed = function changePlaybackSpeed() {
    var newPlaybackRate = video.playbackRate + 0.25;
    if (newPlaybackRate > 2) newPlaybackRate = 0.25;
    video.playbackRate = newPlaybackRate;
    speedBtn.textContent = "".concat(newPlaybackRate, "x");
  }; // Captions
  var toggleCaptions = function toggleCaptions() {
    var isHidden = captions.mode === "hidden";
    captions.mode = isHidden ? "showing" : "hidden";
    videoContainer.classList.toggle("captions", isHidden);
  }; // Duration
  var formatDuration = function formatDuration(time) {
    var seconds = Math.floor(time % 60);
    var minutes = Math.floor(time / 60) % 60;
    var hours = Math.floor(time / 3600);
    if (hours === 0) {
      return "".concat(minutes, ":").concat(leadingZeroFormatter.format(seconds));
    } else {
      return "".concat(hours, ":").concat(leadingZeroFormatter.format(minutes), ":").concat(leadingZeroFormatter.format(seconds));
    }
  };
  var skip = function skip(duration) {
    video.currentTime += duration;
  }; // Volume
  var toggleMute = function toggleMute() {
    video.muted = !video.muted;
  };
  var toggleTheaterMode = function toggleTheaterMode() {
    videoContainer.classList.toggle("theater");
  };
  var toggleFullScreenMode = function toggleFullScreenMode() {
    if (document.fullscreenElement == null) {
      videoContainer.requestFullscreen();
    } else {
      document.exitFullscreen();
    }
  };
  var toggleMiniPlayerMode = function toggleMiniPlayerMode() {
    if (videoContainer.classList.contains("mini-player")) {
      document.exitPictureInPicture();
    } else {
      video.requestPictureInPicture();
    }
  };
  var togglePlay = function togglePlay() {
    video.paused ? video.play() : video.pause();
  };
  document.addEventListener("keydown", function (e) {
    var tagName = document.activeElement.tagName.toLowerCase();
    if (tagName === "input") return;
    switch (e.key.toLowerCase()) {
      case " ":
        if (tagName === "button") return;
      case "k":
        togglePlay();
        break;
      case "f":
        toggleFullScreenMode();
        break;
      case "t":
        toggleTheaterMode();
        break;
      case "i":
        toggleMiniPlayerMode();
        break;
      case "m":
        toggleMute();
        break;
      case "arrowleft":
      case "j":
        skip(-5);
        break;
      case "arrowright":
      case "l":
        skip(5);
        break;
      case "c":
        toggleCaptions();
        break;
    }
  });

  // Timeline
  if (timelineContainer) {
    timelineContainer.addEventListener("mousemove", handleTimelineUpdate);
    timelineContainer.addEventListener("mousedown", toggleScrubbing);
  }
  document.addEventListener("mouseup", function (e) {
    if (isScrubbing) toggleScrubbing(e);
  });
  document.addEventListener("mousemove", function (e) {
    if (isScrubbing) handleTimelineUpdate(e);
  });
  var isScrubbing = false;
  var wasPaused;
  speedBtn.addEventListener("click", changePlaybackSpeed);
  var captions = video.textTracks[0];
  captions.mode = "hidden";
  captionsBtn.addEventListener("click", toggleCaptions);
  video.addEventListener("loadeddata", function () {
    totalTimeElem.textContent = formatDuration(video.duration);
  });
  video.addEventListener("timeupdate", function () {
    currentTimeElem.textContent = formatDuration(video.currentTime);
    var percent = video.currentTime / video.duration;
    if (!timelineContainer) return;
    timelineContainer.style.setProperty("--progress-position", percent);
  });
  var leadingZeroFormatter = new Intl.NumberFormat(undefined, {
    minimumIntegerDigits: 2
  });
  muteBtn.addEventListener("click", toggleMute);
  volumeSlider.addEventListener("input", function (e) {
    video.volume = e.target.value;
    video.muted = e.target.value === 0;
  });
  video.addEventListener("volumechange", function () {
    volumeSlider.value = video.volume;
    var volumeLevel;
    if (video.muted || video.volume === 0) {
      volumeSlider.value = 0;
      volumeLevel = "muted";
    } else if (video.volume >= 0.5) {
      volumeLevel = "high";
    } else {
      volumeLevel = "low";
    }
    videoContainer.dataset.volumeLevel = volumeLevel;
  });

  // View Modes
  // theaterBtn.addEventListener("click", toggleTheaterMode)
  fullScreenBtn.addEventListener("click", toggleFullScreenMode);
  miniPlayerBtn.addEventListener("click", toggleMiniPlayerMode);
  document.addEventListener("fullscreenchange", function () {
    videoContainer.classList.toggle("full-screen", document.fullscreenElement);
  });
  video.addEventListener("enterpictureinpicture", function () {
    videoContainer.classList.add("mini-player");
  });
  video.addEventListener("leavepictureinpicture", function () {
    videoContainer.classList.remove("mini-player");
  });

  // Play/Pause
  playPauseBtn.addEventListener("click", togglePlay);
  video.addEventListener("click", togglePlay);
  video.addEventListener("play", function () {
    videoContainer.classList.remove("paused");
  });
  video.addEventListener("pause", function () {
    videoContainer.classList.add("paused");
  });
}

/***/ }),

/***/ "./resources/js/utils/Sidebar.js":
/*!***************************************!*\
  !*** ./resources/js/utils/Sidebar.js ***!
  \***************************************/
/***/ (() => {

// import SimpleBar from "../plugins/SimpleBar";
// import SimpleBar from "simplebar";
var initialize = function initialize() {
  initializeSidebarCollapse();
};
var initializeSidebarCollapse = function initializeSidebarCollapse() {
  var sidebarElement = document.getElementsByClassName("js-sidebar")[0];
  var sidebarToggleElement = document.getElementsByClassName("js-sidebar-toggle")[0];
  var cardSection = document.getElementById("video-card-section");
  if (sidebarElement && sidebarToggleElement) {
    sidebarToggleElement.addEventListener("click", function () {
      sidebarElement.classList.toggle("collapsed");
      cardSection.classList.toggle('xl:grid-cols-5');
      sidebarElement.addEventListener("transitionend", function () {
        window.dispatchEvent(new Event("resize"));
      });
    });
  }
};

// Wait until page is loaded
document.addEventListener("DOMContentLoaded", function () {
  return initialize();
});

/***/ }),

/***/ "./resources/less/carousel.less":
/*!**************************************!*\
  !*** ./resources/less/carousel.less ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0,
/******/ 			"css/carousel": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app","css/carousel"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["css/app","css/carousel"], () => (__webpack_require__("./resources/less/carousel.less")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app","css/carousel"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;