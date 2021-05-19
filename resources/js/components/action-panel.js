export default function (state = {
  open: false
}) {
  return {
    open: state.open,
    contact: null,

    init () {
      this.attachEvent();
    },

    attachEvent () {
      console.info('slideover:show listener added')
      window.addEventListener('slideover:show', (event) => {
        this.open = true;
        this.contact = event.detail;
        console.log(this.contact.name);
      });
    }
  }
}
