let sidebarActive = true;

        toggleBtn.addEventListener('click', () => {
            event.preventDefault();

            if(sidebarActive) {
                dashboard_sidebar.style.width = '5%';
                dashboard_content.style.marginLeft = '5%';
                dashboard_content.style.width = '95%';
                document.getElementById('dashboard_sidebar').style.transition = '1s';
                document.getElementById('dashboard_content').style.transitionDuration = '1s';

                menuTextLogo.style.display = 'none';
                menuTextLogo.style.fontSize = '20px';
                document.getElementById('menuTextLogo').style.display = 'none';
                document.getElementById('menuLogo').style.display = 'inline-block';
                document.getElementById('dashboard_icon').style.padding = '1rem 0rem 1rem 1rem'
                document.getElementById('dashboard_icon').style.transitionDuration = '1s';

                menuIcons = document.getElementsByClassName("menuText");
                for (let i = 0; i < menuIcons.length; i++) {
                    menuIcons[i].style.display = 'none';                    
                }
                sidebarActive = false;
            } else {
                dashboard_sidebar.style.width = '20%';
                dashboard_content.style.marginLeft = '20%';
                dashboard_content.style.width = '80%';
                document.getElementById('dashboard_sidebar').style.transition = '.5s';
                document.getElementById('dashboard_content').style.transitionDuration = '.5s';

                menuTextLogo.style.fontSize = '30px';
                document.getElementById('menuTextLogo').style.display = 'inline-block';
                document.getElementById('menuLogo').style.display = 'none';
                document.getElementById('dashboard_icon').style.padding = '1rem 0rem 1.5rem 2rem'
                document.getElementById('dashboard_icon').style.transitionDuration = '1s';

                menuIcons = document.getElementsByClassName("menuText");
                for (let i = 0; i < menuIcons.length; i++) {
                    menuIcons[i].style.display = "inline-block";
                }
                sidebarActive = true;
            }
            
        });