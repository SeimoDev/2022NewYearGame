/**
 *
 * 爱艺新拟态风格个人主页
 *
 * @link    http://ay6.top
 * @since   1.0.1
 *
 */

const navMenuItems = document.querySelectorAll('#nav-menu a');
 
// 设置指示器的点击切换
function handleMenuItemClick(target){
    navMenuItems.forEach(item=>{
        item.classList.remove('active');
        item.style='';
    });
    target.classList.add('active');
 
    //设置要展示的内容
    const cueerntSection = document.querySelector('.active-section');
    cueerntSection.classList.remove('active-section');
    const newCurrentSection = document.querySelector(`.${target.getAttribute('data-rel')}`);
    newCurrentSection.classList.add('active-section');
}
 
navMenuItems.forEach(item=>{
    item.addEventListener('click',e=>handleMenuItemClick(e.target));
    item.classList.contains('active') && handleMenuItemClick(item);
});