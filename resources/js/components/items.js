export default function (state = {
  items: []
}) {
  return {
    items: state.items,

    editItemClick (index) {
      this.$wire.emit('slideover:set', {
        name: 'livewire:forms.items.edit-form',
        title: 'Items',
        data: this.items[index],
      });
      window.dispatchEvent(new CustomEvent('slideover:show', {
        detail: this.items[index]
      }));
    },
  }
}
