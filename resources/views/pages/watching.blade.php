@extends('layouts.master')

@section('content')

<div class="video-container paused" data-volume-level="high">
    <img class="thumbnail-img">
    <div class="video-controls-container">
        <div class="timeline-container">
            <div class="timeline">
                <img class="preview-img">
                <div class="thumb-indicator"></div>
            </div>
        </div>
        <div class="controls">
            <button class="play-pause-btn flex w-5 h-5 pl-2 items-center justify-center">

                <svg class="play-icon flex items-center justify-center h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24" fill="none">
                    <path d="M4 11.9999V8.43989C4 4.01989 7.13 2.2099 10.96 4.4199L14.05 6.1999L17.14 7.9799C20.97 10.1899 20.97 13.8099 17.14 16.0199L14.05 17.7999L10.96 19.5799C7.13 21.7899 4 19.9799 4 15.5599V11.9999Z" stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg class="pause-icon flex items-center justify-center h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24" fill="none">
                    <path d="M10.65 19.11V4.89C10.65 3.54 10.08 3 8.64 3H5.01C3.57 3 3 3.54 3 4.89V19.11C3 20.46 3.57 21 5.01 21H8.64C10.08 21 10.65 20.46 10.65 19.11Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 19.11V4.89C21 3.54 20.43 3 18.99 3H15.36C13.93 3 13.35 3.54 13.35 4.89V19.11C13.35 20.46 13.92 21 15.36 21H18.99C20.43 21 21 20.46 21 19.11Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                    
            </button>
            <div class="volume-container">
                <button class="mute-btn">
                    <svg class="volume-low-icon h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24">
                        <path d="M3.33008 10V14C3.33008 16 4.33008 17 6.33008 17H7.76008C8.13008 17 8.50008 17.11 8.82008 17.3L11.7401 19.13C14.2601 20.71 16.3301 19.56 16.3301 16.59V7.41C16.3301 4.43 14.2601 3.29 11.7401 4.87L8.82008 6.7C8.50008 6.89 8.13008 7 7.76008 7H6.33008C4.33008 7 3.33008 8 3.33008 10Z" stroke="#ffffff" stroke-width="2"/>
                        <path d="M19.3301 8C21.1101 10.37 21.1101 13.63 19.3301 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        
                    <svg class="volume-high-icon h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24">
                        <path d="M2 10V14C2 16 3 17 5 17H6.43C6.8 17 7.17 17.11 7.49 17.3L10.41 19.13C12.93 20.71 15 19.56 15 16.59V7.41C15 4.43 12.93 3.29 10.41 4.87L7.49 6.7C7.17 6.89 6.8 7 6.43 7H5C3 7 2 8 2 10Z" stroke="#ffffff" stroke-width="2"/>
                        <path d="M18 8C19.78 10.37 19.78 13.63 18 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.8301 5.5C22.7201 9.35 22.7201 14.65 19.8301 18.5" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <svg class="volume-muted-icon h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24">
                        <path d="M15 8.37V7.41C15 4.43 12.93 3.29 10.41 4.87L7.49 6.7C7.17 6.89 6.8 7 6.43 7H5C3 7 2 8 2 10V14C2 16 3 17 5 17H7" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.4102 19.13C12.9302 20.71 15.0002 19.56 15.0002 16.59V12.95" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.81 9.42001C19.71 11.57 19.44 14.08 18 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.1501 7.79999C22.6201 11.29 22.1801 15.37 19.8301 18.5" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 2L2 22" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        
                </button>
                <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
            </div>
            <div class="duration-container text-xs">
                <div class="current-time text-xs">0:00</div> / <div class="total-time text-xs"></div>
            </div>
            <div class="flex items-center gap-1">   
                <button class="speed-btn wide-btn  h-4 w-4 sm:h-5 sm:w-5 flex items-center text-xs justify-center"> 1x </button>
                
                <button class="captions-btn flex items-center justify-center">
                    <svg class=" h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24" fill="none" >
                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 17.0801H15.65" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.97 17.0801H6.5" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.5 13.3201H11.97" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.27 13.3201H6.5" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button class="mini-player-btn flex items-center justify-center">
                    <svg class=" h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24" fill="none">
                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.6 18.5H16.4C17.9 18.5 18.5 17.9 18.5 16.4V14.6C18.5 13.1 17.9 12.5 16.4 12.5H12.6C11.1 12.5 10.5 13.1 10.5 14.6V16.4C10.5 17.9 11.1 18.5 12.6 18.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <button class="full-screen-btn flex items-center justify-center">
                    <svg class="open h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24" fill="none">
                        <path d="M2 9V6.5C2 4.01 4.01 2 6.5 2H9" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 2H17.5C19.99 2 22 4.01 22 6.5V9" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 16V17.5C22 19.99 19.99 22 17.5 22H16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 22H6.5C4.01 22 2 19.99 2 17.5V15" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                        
                    <svg class="close h-4 w-4 sm:h-5 sm:w-5" viewBox="0 0 24 24" fill="none">
                        <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 18V14H6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 6V10H18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18 14L14 14V18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 10H10V6" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <video id="video" autoplay="true" src="{{ asset('assets/uploads/oceans.mp4') }}">
        <track kind="captions" srclang="en" src="{{ asset('assets/subtitle/subtitles.vtt') }}">
    </video>
</div>

<div class="py-3">
    <h1 class="font-medium">BOFURI: I Don't Want to Get Hurt, so I'll Max Out My Defense. Season 2</h1>
    <div class="flex w-full justify-between items-center relative pt-10">
        
        <div class="flex items-center relative w-1/2 p-3 border rounded-md">
            <div class="w-16 flex-shrink-0">
                <img class="w-16 absolute -top-5 h-16 object-cover rounded-full" src="https://z-p3-scontent.fpnh5-4.fna.fbcdn.net/v/t39.30808-1/302925799_787548502395648_6773811241356637409_n.jpg?stp=dst-jpg_p320x320&_nc_cat=101&ccb=1-7&_nc_sid=7206a8&_nc_ohc=gwyyVc7g-r0AX9WPG30&_nc_ht=z-p3-scontent.fpnh5-4.fna&oh=00_AfBXK7LAlYBPx9A2hHmr-RDdjbt1XaGUJg_pMFJTrXJaYg&oe=63FC0BDE" alt="">
            </div>
            <div class="flex px-7 flex-col w-full justify-start items-center">
                <h1 class="w-full font-medium">Adventure / Action</h1>
                <p class="w-full text-xs">65.7k Follower</p>
            </div>
            <button class="bg-[#092857] px-3 py-1 text-white rounded-full text-sm" type="button">Follow</button>
        </div>

        <div class="flex justify-end gap-3 items-center w-1/2">
            <div class="flex gap-3 items-center bg-slate-100 px-3 rounded-full py-1">
                <button class="flex gap-1 items-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.47998 18.35L10.58 20.75C10.98 21.15 11.88 21.35 12.48 21.35H16.28C17.48 21.35 18.78 20.45 19.08 19.25L21.48 11.95C21.98 10.55 21.08 9.34997 19.58 9.34997H15.58C14.98 9.34997 14.48 8.84997 14.58 8.14997L15.08 4.94997C15.28 4.04997 14.68 3.04997 13.78 2.74997C12.98 2.44997 11.98 2.84997 11.58 3.44997L7.47998 9.54997" stroke="#071F43" stroke-width="1.5" stroke-miterlimit="10"/>
                        <path d="M2.38 18.35V8.55002C2.38 7.15002 2.98 6.65002 4.38 6.65002H5.38C6.78 6.65002 7.38 7.15002 7.38 8.55002V18.35C7.38 19.75 6.78 20.25 5.38 20.25H4.38C2.98 20.25 2.38 19.75 2.38 18.35Z" stroke="#071F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-slate-500 text-sm">65.7k</span>
                </button>
                |
                <button class="flex items-center">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.52 5.65002L13.42 3.25002C13.02 2.85002 12.12 2.65002 11.52 2.65002H7.71998C6.51998 2.65002 5.21998 3.55002 4.91998 4.75002L2.51998 12.05C2.01998 13.45 2.91998 14.65 4.41998 14.65H8.41998C9.01998 14.65 9.51998 15.15 9.41998 15.85L8.91998 19.05C8.71998 19.95 9.31998 20.95 10.22 21.25C11.02 21.55 12.02 21.15 12.42 20.55L16.52 14.45" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
                        <path d="M21.62 5.65V15.45C21.62 16.85 21.02 17.35 19.62 17.35H18.62C17.22 17.35 16.62 16.85 16.62 15.45V5.65C16.62 4.25 17.22 3.75 18.62 3.75H19.62C21.02 3.75 21.62 4.25 21.62 5.65Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <button class="flex items-center gap-2 bg-slate-100 px-3 rounded-full py-1">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 1.66663C5.40002 1.66663 1.66669 5.39996 1.66669 9.99996C1.66669 14.6 5.40002 18.3333 10 18.3333C14.6 18.3333 18.3334 14.6 18.3334 9.99996" stroke="#292D32" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.8333 9.16671L17.6666 2.33337" stroke="#292D32" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18.3333 5.69163V1.66663H14.3083" stroke="#292D32" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Share</span>
            </button>
        </div>
    </div>
</div>
<div class="p-3 mt-3 border rounded-lg">
    <p class="text-sm text-slate-500">Second season of BOFURI: I Don't Want to Get Hurt, so I'll Max Out My Defense.After an enthusiastic invitation from her friend, Kaede Honjou reluctantly agrees to try New World Online: a very popular VRMMO played by thousands of people</p>
</div>

@endsection

@section('script')
<script>
const playPauseBtn = document.querySelector(".play-pause-btn")
    const theaterBtn = document.querySelector(".theater-btn")
    const fullScreenBtn = document.querySelector(".full-screen-btn")
    const miniPlayerBtn = document.querySelector(".mini-player-btn")
    const muteBtn = document.querySelector(".mute-btn")
    const captionsBtn = document.querySelector(".captions-btn")
    const speedBtn = document.querySelector(".speed-btn")
    const currentTimeElem = document.querySelector(".current-time")
    const totalTimeElem = document.querySelector(".total-time")
    const previewImg = document.querySelector(".preview-img")
    const thumbnailImg = document.querySelector(".thumbnail-img")
    const volumeSlider = document.querySelector(".volume-slider")
    const videoContainer = document.querySelector(".video-container")
    const timelineContainer = document.querySelector(".timeline-container")
    const video = document.getElementById("video")
  
    document.addEventListener("keydown", e => {
        const tagName = document.activeElement.tagName.toLowerCase()
    
        if (tagName === "input") return
    
        switch (e.key.toLowerCase()) {
            case " ":
            if (tagName === "button") return
            case "k":
                togglePlay()
            break
            case "f":
                toggleFullScreenMode()
            break
            case "t":
                toggleTheaterMode()
            break
            case "i":
                toggleMiniPlayerMode()
            break
            case "m":
                toggleMute()
            break
            case "arrowleft":
            case "j":
                skip(-5)
            break
            case "arrowright":
            case "l":
                skip(5)
            break
            case "c":
                toggleCaptions()
            break
        }
    })
  
    // Timeline
    timelineContainer.addEventListener("mousemove", handleTimelineUpdate)
    timelineContainer.addEventListener("mousedown", toggleScrubbing)
    document.addEventListener("mouseup", e => {
        if (isScrubbing) toggleScrubbing(e)
    })
    document.addEventListener("mousemove", e => {
        if (isScrubbing) handleTimelineUpdate(e)
    })
  
    let isScrubbing = false
    let wasPaused
    function toggleScrubbing(e) {
        const rect = timelineContainer.getBoundingClientRect()
        const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width
        isScrubbing = (e.buttons & 1) === 1
        videoContainer.classList.toggle("scrubbing", isScrubbing)
        if (isScrubbing) {
            wasPaused = video.paused
            video.pause()
        } else {
            video.currentTime = percent * video.duration
            if (!wasPaused) video.play()
        }
    
        handleTimelineUpdate(e)
    }
  
    function handleTimelineUpdate(e) {
        const rect = timelineContainer.getBoundingClientRect()
        const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width
        const previewImgNumber = Math.max(
            1,
            Math.floor((percent * video.duration) / 10)
        )
        const previewImgSrc = `${window.origin}/assets/preview/preview-${previewImgNumber}.jpg`
        previewImg.src = previewImgSrc
        timelineContainer.style.setProperty("--preview-position", percent)
    
        if (isScrubbing) {
            e.preventDefault()
            thumbnailImg.src = previewImgSrc
            timelineContainer.style.setProperty("--progress-position", percent)
        }
    }
  
    // Playback Speed
    speedBtn.addEventListener("click", changePlaybackSpeed)
  
    function changePlaybackSpeed() {
        let newPlaybackRate = video.playbackRate + 0.25
        if (newPlaybackRate > 2) newPlaybackRate = 0.25
        video.playbackRate = newPlaybackRate
        speedBtn.textContent = `${newPlaybackRate}x`
    }
  
    // Captions
    const captions = video.textTracks[0]
    captions.mode = "hidden"
  
    captionsBtn.addEventListener("click", toggleCaptions)
  
    function toggleCaptions() {
        const isHidden = captions.mode === "hidden"
        captions.mode = isHidden ? "showing" : "hidden"
        videoContainer.classList.toggle("captions", isHidden)
    }
  
    // Duration
    video.addEventListener("loadeddata", () => {
        totalTimeElem.textContent = formatDuration(video.duration)
    })
  
    video.addEventListener("timeupdate", () => {
        currentTimeElem.textContent = formatDuration(video.currentTime)
        const percent = video.currentTime / video.duration
        timelineContainer.style.setProperty("--progress-position", percent)
    })
  
    const leadingZeroFormatter = new Intl.NumberFormat(undefined, {
        minimumIntegerDigits: 2,
    })
    function formatDuration(time) {
        const seconds = Math.floor(time % 60)
        const minutes = Math.floor(time / 60) % 60
        const hours = Math.floor(time / 3600)
        if (hours === 0) {
            return `${minutes}:${leadingZeroFormatter.format(seconds)}`
        } else {
            return `${hours}:${leadingZeroFormatter.format(
            minutes
            )}:${leadingZeroFormatter.format(seconds)}`
        }
    }
  
    function skip(duration) {
        video.currentTime += duration
    }
  
    // Volume
    muteBtn.addEventListener("click", toggleMute)
    volumeSlider.addEventListener("input", e => {
        video.volume = e.target.value
        video.muted = e.target.value === 0
    })
  
    function toggleMute() {
        video.muted = !video.muted
    }
  
    video.addEventListener("volumechange", () => {
        volumeSlider.value = video.volume
        let volumeLevel
        if (video.muted || video.volume === 0) {
            volumeSlider.value = 0
            volumeLevel = "muted"
        } else if (video.volume >= 0.5) {
            volumeLevel = "high"
        } else {
            volumeLevel = "low"
        }
    
        videoContainer.dataset.volumeLevel = volumeLevel
    })
  
    // View Modes
    // theaterBtn.addEventListener("click", toggleTheaterMode)
    fullScreenBtn.addEventListener("click", toggleFullScreenMode)
    miniPlayerBtn.addEventListener("click", toggleMiniPlayerMode)
  
    function toggleTheaterMode() {
        videoContainer.classList.toggle("theater")
    }
  
    function toggleFullScreenMode() {
        if (document.fullscreenElement == null) {
            videoContainer.requestFullscreen()
        } else {
            document.exitFullscreen()
        }
    }
  
    function toggleMiniPlayerMode() {
        if (videoContainer.classList.contains("mini-player")) {
            document.exitPictureInPicture()
        } else {
            video.requestPictureInPicture()
        }
    }
  
    document.addEventListener("fullscreenchange", () => {
         videoContainer.classList.toggle("full-screen", document.fullscreenElement)
    })
  
    video.addEventListener("enterpictureinpicture", () => {
        videoContainer.classList.add("mini-player")
    })
  
    video.addEventListener("leavepictureinpicture", () => {
        videoContainer.classList.remove("mini-player")
    })
  
    // Play/Pause
    playPauseBtn.addEventListener("click", togglePlay)
    video.addEventListener("click", togglePlay)
  
    function togglePlay() {
        video.paused ? video.play() : video.pause()
    }
  
    video.addEventListener("play", () => {
        videoContainer.classList.remove("paused")
    })
  
    video.addEventListener("pause", () => {
        videoContainer.classList.add("paused")
    })
</script>
@endsection