import Vue from 'vue'
import VueRouter from 'vue-router'
import Duanzi from '@/views/duanzi/duanzi'
import Guanzhu from '@/views/guanzhu/guanzhu'
import Picture from '@/views/picture/picture'
import Tuijian from '@/views/tuijian/tuijian'
import Video from '@/views/video/video'
import Home from '@/views/home/index'
import video from '@/components/fullvd'

Vue.use(VueRouter)
let router = new VueRouter({
    mode:"history",
    linkActiveClass:'active',
    routes:[
        {
            path:'/',
            component:video
        },
        {
            path:'/home',
            alias:'/index',
            component:Home
        },
        {
            path:'/duanzi',
            component:Duanzi
        },
        {
            path:'/guanzhu',
            component:Guanzhu
        },
        {
            path:'/picture',
            component:Picture
        },
        {
            path:'/tuijian',
            component:Tuijian
        },
        {
            path:'video',
            component:Video
        },
        {
            path:'*',
            redirect:(to) => {
                if(to.path === '/123'){
                    return '/home'
                }else {
                    return '/home'
                }
            }
        }
    ]
})
export default router
