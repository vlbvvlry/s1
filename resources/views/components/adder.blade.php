<section class="text-center row h-100" id="adder">
    <div class="align-self-center">
        <div class="col-lg-3 col-md-4 mx-auto rounded-3 py-4 opacity-self">
            <h1>Галерея</h1>
            <p>Надо бы добавить картинки</p>

            <form enctype="multipart/form-data" method="POST"
             action="{{ route('picture.store') }}">
                @csrf
                <input type="hidden" name="MAX_FILE_SIZE" value="999000">
                <p>
                    <label for="file_upload" class="btn btn-dark">Выбрать картинку..</label>
                    <input type="file"  class="hidd"
                     name="userfile" accept=".jpg,,jpeg,.png" id="file_upload">
                </p>
                <p><input type="submit" class="btn btn-primary my-2" value="Загрузить >"></p>
            </form>

        </div>
    </div>
</section>
