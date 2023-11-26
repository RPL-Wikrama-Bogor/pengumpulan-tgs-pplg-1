<template>
<div class="container">
    <div class="row-contact">
            <div class="contact-img">
                <img src="@/assets/img/contact.svg" alt="contact">
            </div>
            
            <div class="form-contact">
                <h2>Contact</h2>
                <div class="input-form">
                    <label for="name">Name</label>
                    <input type="text" v-model="form.name" class="input" placeholder="Enter Name">
                </div>

                <div class="input-form">
                    <label for="email">E-mail</label>
                    <input type="email" v-model="form.email" class="input" placeholder="Enter E-mail">
                </div>

                <div class="input-form">
                    <label for="phone">Phone</label>
                    <input type="number" v-model="form.phone" class="input" placeholder="Enter Number Phone">
                </div>

                <div class="input-form">
                    <label for="message">Message</label>
                    <textarea v-model="form.message" class="input" type="text" placeholder="Enter Message" 
                    cols="30" rows="30" ></textarea>
                </div>

                <div class="input-form">
                    <button @click="submit" type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
            
    </div>
</div>
</template>

<script>
import { Post } from '@/Api/index.js'
export default {
    data() {
        return{
            form: {
                name: '',
                email: '',
                phone: '',
                message: ''
            }
        }
    },
    methods: {
        async submit(){
            const response = await Post('http://127.0.0.1:9000/api/contact', this.form);
            console.log(response);
            if (response.status == 200) {
                this.form = {
                    name: '',
                    email: '',
                    phone: '',
                    message: ''
                }
                alert('data berhasil di tambahkan');
            }
        }
    }
}
</script>

<style scoped>
.row-contact {
display: flex;
margin-top: 10px;
align-items: center;
}
.contact-img {
width: 50%;
}
.form-contact {
width: 50%;
display: flex;
flex-direction: column;
float: right;
}
.contact-img img {
width: 80%;
}
.input-form {
width: 80%;
position: relative;
display: flex;
margin: 8px 5px;
flex-direction: column;
}
.input-form label {
margin-bottom: 5px;
}
.input {
width: 100%;
padding: 12px 15px;
height: 20px;
font-size: 16px;
border: 1px solid #dddddd;
border-radius: 5px;
color: black;
box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
/* border: none; */
}
.input:focus {
outline: none;
}

</style>