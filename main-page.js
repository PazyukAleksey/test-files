

    function accordion(selector) {
      const container = document.querySelector(selector);
      const blocks = container.querySelectorAll('.js-accordion');

      blocks.forEach(item => {

        item.addEventListener('click', (event) => {
          event.preventDefault();

          if (item.classList.contains('active')) {
              item.classList.remove('active');
          } else {
            close(blocks);
            open(item);
          }
        });
      });

      function close(blocks) {
        blocks.forEach(item => {
          if (item.classList.contains('active')) {
            item.classList.remove('active');
          }
        });
      }
      function open(block) {
        block.classList.add('active');
      }

    }

    // document.querySelectorAll('.native-app__item').forEach(elem => {
    //     elem.addEventListener('click', (event) => {
    //         document.querySelector('.native-app__item.active').classList.remove('active')
    //         setTimeout(() => {elem.classList.add('active')}, 300)
    //     })
    // })

    if (document.querySelector('.js-tab')) {
        function tabs(tab) {
            let selector = document.querySelector(tab);
            let tabNav = selector.querySelectorAll('[data-tab]');
            let tabContent = selector.querySelectorAll('.c-tab__content');

            function closeTabs(tabs) {
                tabs.forEach(tab => {
                    tab.classList.remove('is-active');
                });
            }

            tabNav.forEach(tab => {
                tab.addEventListener('click', (event) => {
                    let targetData = event.target.getAttribute('data-tab');
                    closeTabs(tabNav);
                    closeTabs(tabContent);

                    event.target.classList.add('is-active');
                    selector.querySelector(targetData).classList.add('is-active');
                });
            });
        }
        tabs('.js-tab');
    }

    document.addEventListener('DOMContentLoaded', function (){
        accordion('.why-choose');
        accordion('#v1');
        accordion('#v2');
        accordion('.js-accordion-native-app');
    })