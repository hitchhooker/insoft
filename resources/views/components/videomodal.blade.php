<!--Modal TODO: Stop embedded video when x is pressed-->
<div id="videomodal" class="modal z-50">
    <div class="modal-dialog">
        <div class="modal-content bg-primary flex flex-col">
            <a href="#" onclick="stopVideo()" class="flex justify-end pr-5 text-5xl 
            videotext-white hover:text-secondary cursor-pointer">×</a>
            <div class="flex items-center justify-center">
                <div id="player" class="flex w-full min-h-640 lg:h-screen"></div>
            </div>
        </div>
    </div>
</div>
