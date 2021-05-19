export default function (state = {
  open: false
}) {
  return {
    activeDescendant: null,
    activeIndex: null,
    items: null,
    open: state.open,

    init () {
      this.items = Array.from(this.$el.querySelectorAll('[role="menuitem"]'));
      this.$watch('open', () => {
        if (this.open) {
          this.activeIndex = -1;
        }
      });
    },

    focusButton () {
      this.$refs.button.focus();
    },

    onButtonClick () {
      this.open = !this.open;

      if (this.open) {
        this.$nextTick(() => {
          this.$refs["menu-items"].focus();
        });
      }
    },

    onButtonEnter () {
      this.open = !this.open;

      if (this.open) {
        this.activeIndex = 0;
        this.activeDescendant = this.items[this.activeIndex].id;
        this.$nextTick(() => {
          this.$refs["menu-items"].focus();
        });
      }
    },

    onArrowUp () {
      if (!this.open) {
        return this.open = true, this.activeIndex = this.items.length - 1,
          void(this.activeDescendant = this.items[this.activeIndex].id);
      }
      if (0 !== this.activeIndex) {
        this.activeIndex = -1 === this.activeIndex ? this.items.length - 1 : this.activeIndex - 1;
        this.activeDescendant = this.items[this.activeIndex].id;
      }
    },

    onArrowDown () {
      if (!this.open) {
        return this.open = true, this.activeIndex = 0,
          void(this.activeDescendant = this.items[this.activeIndex].id);
      }

      if (this.activeIndex !== this.items.length - 1) {
        this.activeIndex = this.activeIndex + 1;
        this.activeDescendant = this.items[this.activeIndex].id;
      }
    },

    onClickAway (event) {
      if (this.open) {
        const editableSelector = [
          '[contentEditable=true]',
          '[tabindex]', 'a[href]',
          'area[href]',
          'button:not([disabled])',
          'iframe',
          'input:not([disabled])',
          'select:not([disabled])',
          'textarea:not([disabled])'
        ].map((selector) => {
          return `${selector}:not([tabindex='-1'])`;
        }).join(",");

        this.open = false;

        if (!event.target.closest(editableSelector)) {
          this.focusButton();
        }
      }
    }
  }
}
