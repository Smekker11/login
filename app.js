const { createApp } = Vue

 createApp({
    data() {
        return {
            message: 'User not found!'
        }
    }
 }).mount('.login-box')