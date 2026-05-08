<?php  
	get_header();
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
?>
	<!-- Page Content -->
    <main>
        <div class="content">
            <div id="cabinet">

                <div class="appHeader">
                    <ul>
                        <li> <button @click="goToMain">Главная</button> </li>
                        <li> <button @click="goToCourses">Курсы</button> </li>
                        <li> <button @click="goToAccount">Аккаунт</button> </li>
                        <li> <button @click="goToLogOut">Выйти</button> </li>
                    </ul>
                </div>

                <main>
                    <div id="loginFrame" v-if="loginShow">
                        <h2>Login Frame</h2>
                    </div>
                    <div id="mainFrame" v-if="mainShow">
                        <h2>MainFrame</h2>
                    </div>
                    <div id="coursesList" v-if="coursesShow">
                        <div v-for="course in courses" @click="setCourse(course)">
                            <h3>{{course.name}}</h3>
                            <p>{{course.desc}}</p>
                        </div>
                    </div>
                    <div id="accountInfo" v-if="accountShow">
                        <h2>Account Frame</h2>
                    </div>

                    <div id="courseInner" v-if="chosenCourse">
                        <h3>{{chosenCourse.name}}</h3>
                        <p>{{chosenCourse.desc}}</p>
                        <embed :src="chosenCourse.materials" type="application/pdf" width="100%" height="100%">
                    </div>
                </main>

            </div>
        </div>
    </main>
    <!-- ./Page Content -->
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 
            //  Component Main
            // 
                Vue.component('hello', {
                    template: '<h2>Hello</h2>'
                })
            // 
            // ./Component Main
            // 
            var cabinet = new Vue({
                el: '#cabinet',
                data: {
                loginShow: false,
                mainShow: false,
                coursesShow: false,
                accountShow: false,
                chosenCourse: null,
                userLogin: {
                    login: '',
                    password: ''
                },
                courses: [
                    {
                        name: 'Course #1',
                        desc: 'We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.',
                        materials: '/wp-content/uploads/2019/08/proverka.pdf'
                    },
                    {
                        name: 'Course #2',
                        desc: 'We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.',
                        materials: '/wp-content/uploads/2019/08/proverka.pdf'
                    },
                    {
                        name: 'Course #3',
                        desc: 'We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.',
                        materials: '/wp-content/uploads/2019/08/proverka.pdf'
                    },
                    {
                        name: 'Course #4',
                        desc: 'We hope you have enjoyed using Materialize and if you feel like it has helped you out and want to support the team you can help us by donating or backing us on Patreon. Any amount would help support and continue development on this project and is greatly appreciated.',
                        materials: '/wp-content/uploads/2019/08/proverka.pdf'
                    },
                ],
                user: {
                    name: null,
                    uid: null,
                    email: null
                }
            },
            methods:{
                append(e){
                    e.preventDefault();
                },
                send(){
                    console.log('Otpravim');
                },
                setCourse(course){
                    console.log(course);
                    
                    this.nullAll();
                    this.chosenCourse = course;
                },
                nullAll(){
                    this.chosenCourse = null;
                    this.loginShow = false;
                    this.mainShow = false;
                    this.coursesShow = false;
                    this.accountShow = false;
                },
                goToMain(){
                    this.nullAll();
                    this.mainShow = true;
                },
                goToCourses(){
                    this.nullAll();
                    this.coursesShow = true;
                },
                goToAccount(){
                    this.nullAll();
                    this.accountShow = true;
                },
                goToLogOut(){
                    this.nullAll();
                    console.log('Log Out.');
                },
            },
            mounted(){
                this.coursesShow = true;
            }
        });
    });
    </script>
    <style>
        #cabinet{
            padding-top: 45px;
            padding-bottom: 45px;
        }
    </style>
<?php
		} // end while
	} // end if
	get_footer();
?>