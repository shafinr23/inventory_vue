<template>
    <div>
        <nav class="navbar navbar-defaulr navbar-static-top" >
            <div class="container">
                <div class="navber-header">
                    <!-- collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collaapse" data-target="#app-navbar-collapse" >
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         
                    </button>
                    <a class="navbar-brand">
                             inventory
                         </a>
                    </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                    <!-- left side navbar -->
                    <ul class="nav navbar-nav navbar-left" >
                       <li><a> create cfat </a></li> 
                       <li><a> tech items </a></li> 
                       <li><a> description </a></li> 
                       <li><a> model </a></li>
                       <li><a> menufactures </a></li> 
                       <li><a> location </a></li>  
                       <li><a> category </a></li> 
                    </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
