<div class="single-image-component">
    <div class="single-image-container">
        @if($imagedata!="")
            <img src="{{$imagedata}}"/>
        @endif
    </div>
    <div class="add_image_button">
    <label for="single-image-file" class="btn add-single-image">Add Image</label>
    <input type="file" id="single-image-file" name="filename" hidden>

    </div>
</div>