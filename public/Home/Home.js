document.getElementById('nav').addEventListener('click', function() {
    const menuItems = document.getElementById('menu-items');
    if (menuItems.style.display === 'block') {
        menuItems.style.display = 'none';
    } else {
        menuItems.style.display = 'block';
    }
});
