<template>
    <div class="container">
        <div class="row-contact">
            <div class="contact-img">
                <img src="@/assets/img/contact.svg" alt="">
            </div>
            <div class="form-contact">
                <h2>Contact</h2>
                <div class="input-form">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" v-model="form.name" class="input" placeholder="Enter name">
                </div>
                <div class="input-form">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" v-model="form.email" class="input" placeholder="Enter email">
                </div>
                <div class="input-form">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" v-model="form.phone" class="input" placeholder="Enter phone">
                </div>
                <div class="input-form">
                    <label for="description">description</label>
                    <textarea v-model="form.description" name="description" id="description" placeholder="Enter description" cols="30" class="input" rows="30"></textarea>
                </div>
                <div class="input-form">
                    <button @click="submit" class="btn-service">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Post } from '@/Api/index.js'
export default{
    data(){
        return{
            form:{
                name: '',
                email: '',
                phone: '',
                description: '',
            }
        }
    },
    methods:{
        async submit(){
            const response = await Post('contact', this.form);
            if (response.status == 200){
                this.form = {
                    name: '',
                    email: '',
                    phone: '',
                    description: ''
                }
                alert('data berhasil di tambahkan')
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
box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
/* border: none; */
}
.input:focus {
outline: none;
}

</style>