<template>
    <div>
        <header>
            <ul>

                <li><router-link :to="{name:'home'}">Home</router-link></li>
                <li><router-link :to="{name:'blog'}">Blog</router-link></li>
                <li><router-link :to="{name:'contact'}">Contact</router-link></li>
                <li><router-link :to="{name:'about'}">About Us</router-link></li>
            </ul>
        </header>
    </div>
</template>

<script>
export default {
    name: 'HeaderComp',
    data(){
        return{

        }
    }
}
</script>

<style lang="scss" scoped>
    header{
        background-color: cornsilk;
        padding: 20px;
        ul{
            display: flex;
            justify-content: center;
            li{
                margin: 0 10px;
                list-style: none;
                a{
                    color: grey;
                    text-decoration: none;
                    &.active{
                        color: rgb(131, 195, 252);
                    }
                }
            }
        }
    }
</style>
