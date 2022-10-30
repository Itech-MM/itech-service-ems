
const itech = {
    wait: function(time,action,callback){
        let id = null
        let p = 0
        clearInterval(id)
        action()
        id = setInterval(function(){
            if(p > 0){
                clearInterval(id)
                callback()
            }
            p++
        },time)
    },
    find: function (el, cls) {
        while ((el = el.parentElement) && !el.classList.contains(cls));
        return el;
    }
}
export function menuSearch(){

}
export default itech