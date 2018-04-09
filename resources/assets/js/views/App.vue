<template>
    <div>
        <p>
            <router-link :to="{ name: 'home' }"> Home </router-link>
        </p>
        <p>
            <router-link :to="{ name: 'hello' }"> Hello World </router-link>
        </p>
        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
