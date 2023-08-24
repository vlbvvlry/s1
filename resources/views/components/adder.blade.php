<section class="text-center row h-100">
    <div class="align-self-center">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Галерея</h1>
            <p class="lead text-body-secondary">Надо бы добавить картинки</p>

            <form enctype="multipart/form-data" method="POST"
             action="{{ route('picture.store') }}">
                @csrf
                <input type="hidden" name="MAX_FILE_SIZE" value="999000">
                <p>
                    <label for="file_upload" class="border btn">Выбрать картинку..</label>
                    <input type="file"  class="hidd"
                     name="userfile" accept=".jpg,,jpeg,.png" id="file_upload">
                </p>
                <p><input type="submit" class="btn btn-primary my-2"></p>
            </form>

        </div>
    </div>
</section>
