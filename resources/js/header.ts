/**
 * Make the dropdown appear. Dropdown element
 * @param this The current target element
 * @param event FocusEvent
 */
function showDropdown(this: HTMLElement, event: FocusEvent) {
    if (event.currentTarget instanceof HTMLElement) {
      const toggle = event.currentTarget.dataset.toggle as string;
      console.log(event.type);
      const dropdown = document.querySelector(toggle);
      if (dropdown instanceof HTMLElement) {
        dropdown.classList.remove('hidden');
      }
    }
  }

  /**
   * Analyze the blur event to decide whether to hide the dropdown menu.
   * @param this The current Element
   * @param event FocueEvent
   * @param dropdown The elememnt that is the dropdown menu
   */
  function hideDropdown(this: HTMLElement, event: FocusEvent, dropdown: Element) {
    if (dropdown instanceof HTMLElement) {
      if (event.relatedTarget == null || (event.relatedTarget instanceof Node && !dropdown.contains(event.relatedTarget))) {
        // Hide if focus leaving the dropdown
        dropdown.classList.add('hidden');
      }
    }
  }

  export function initHeader() {

    // Attach hqndlers for the drop downs. Using focus so it works
    // with mouse and keyboard navigation.
    const flyouts = document.querySelectorAll('[data-toggle]');
    flyouts.forEach((menu: Element) => {
      menu.addEventListener('focus', showDropdown);
      if (menu instanceof HTMLElement) {
        const toggle = menu.dataset.toggle as string;
        const dropdown = document.querySelector(toggle);
        menu.addEventListener('blur', (event: Event) => {
          console.log('Blur top button');
          hideDropdown.call(event.currentTarget, event, dropdown)
        })
        if (dropdown instanceof HTMLElement) {
          const dropdownLinks = dropdown.querySelectorAll('a');
          dropdownLinks.forEach((item: Element) => {
            if (item instanceof HTMLElement) {
              item.addEventListener('blur', (event: Event) => {
                hideDropdown.call(event.currentTarget, event, dropdown)
              });
            }
          });
        }
      }
    });

    // Handle the mobile menu open button
    const openButton = document.querySelector('#hdr-open');
    if (openButton instanceof HTMLElement) {
      openButton.addEventListener('click', () => {
        const menu = document.querySelector('#hdr-mobile-menu');
        if (menu instanceof HTMLElement) {
          menu.classList.remove('hidden');
        }
      })
    }

    // Handle the mobile menu close button
    const closeButton = document.querySelector('#hdr-close');
    if (closeButton instanceof HTMLElement) {
      closeButton.addEventListener('click', () => {
        const menu = document.querySelector('#hdr-mobile-menu');
        if (menu instanceof HTMLElement) {
          menu.classList.add('hidden');
        }
      })
    }
  }
