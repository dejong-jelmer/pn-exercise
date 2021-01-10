<template>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <slot name="title"></slot>
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <ul>
                    <slot name="item"></slot>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            }
        }
    }
    console.log("Book loaded");
</script>