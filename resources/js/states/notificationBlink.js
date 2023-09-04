const store = {
    state:{
        notificationBlinkUrl: ""

    }
};

window.addEventListener('click', (e) => {
    if(window.location.pathname == '/userInfo/index' ){
        
        console.log("click recieved.");
        console.log(e.target);
        if(window.$(e.target).attr("id") == "notificationBlinkUrl"){
            store.state.notificationBlinkUrl = window.$("#notificationBlinkUrl").data("url");
            console.log(store.state.notificationBlinkUrl);
        }
    }
    if(window.location.pathname == '/userInfo/hospitalPatientRequestChat' ){
        
        console.log("click recieved.");
        console.log(e.target);
        if(window.$(e.target).attr("id") == "notificationBlinkUrl"){
            store.state.notificationBlinkUrl = window.$("#notificationBlinkUrl").data("url");
            console.log(store.state.notificationBlinkUrl);
        }
    }
});
  
export default store;