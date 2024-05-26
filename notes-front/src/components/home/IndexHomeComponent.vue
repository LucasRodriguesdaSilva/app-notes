<script setup>
</script>

<template>
    <div class="row mt-4 p-2 mb-4">
        <div class="container d-flex justify-content-center">
            <div class="search-border col col-12 col-sm-4 row shadow p-1 mb-4 bg-body-tertiary rounded-pill">
                <div class="search p-1 ">
                    <input type="text" class="form-control input-search " placeholder="Pesquisar">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col col-12 col-sm-6">
                    <button type="button" class="btn btn-outline-secondary btn-sm me-2 rounded-4"><i
                            class="ri-sticky-note-add-line"></i> Criar Nota</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm me-2 rounded-4"><i
                            class="ri-folder-add-fill"></i> Criar Pasta</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.input-search {
    border: transparent;
}

.search-border {
    border: 1px solid #9c9c9c;
}
</style>