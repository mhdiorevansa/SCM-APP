<div>
    <input type="file" class="filepond" name="filepond">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        FilePond.create(document.querySelector('.filepond'));
    });
</script