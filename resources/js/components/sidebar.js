export default function (state = {
  open: false
}) {
  return {
    open: state.open,

    attachEvent () {
      window.addEventListener('sidebar:show', () => {
        this.open = true;
      });
    }
  }
}
