export default function (state = {
  open: false
}) {
  return {
    open: state.open,
    details: null,

    init () {
      this.attachEvent();
    },

    attachEvent () {
      window.addEventListener('slideover:show', (event) => {
        this.open = true;
        this.details = event.detail;
      });

      window.addEventListener('slideover:hide', () => {
        this.open = false;
      });
    }
  }
}
