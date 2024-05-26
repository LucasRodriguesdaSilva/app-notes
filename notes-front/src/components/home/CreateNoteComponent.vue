<script setup>
</script>

<template>
    <div class="row mt-4 p-2 mb-4">
        <div class="div-notes container d-flex justify-content-center">
            <div class="add-notes row shadow p-1 mb-5 bg-body-tertiary rounded">
                <div class="add-notes-title p-1">
                    <input type="text" class="form-control input-notes" placeholder="Título">
                </div>
                <div class="add-notes-body p-1">
                    <input type="text" id="input-note-body" class="form-control input-notes"
                        placeholder="Escreva sua nota">
                </div>
            </div>
        </div>
    </div>    
</template>

<style scoped>
.add-notes {
    border: 1px solid #9c9c9c;
}

.add-notes-title {
    width: 100%;
}

.input-notes {
    border: transparent;
}

#input-note-body {
    height: 10vh;
}
</style>