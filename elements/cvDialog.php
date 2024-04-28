<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cv-modal">
    consulter
</button> -->

<style>
    .modal-content {
        width: 100%;
        min-height: 100%;
    }

    .modal-body {
        padding: 0;
    }

    .modal-body>iframe {
        position: absolute;
    }
</style>

<div class="modal fade" id="cv-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cv-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable skeleton" style="min-width: 70vw;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body skeleton" id="modal-body">
                <iframe src="" style="width: 100%; height: 100%;" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>