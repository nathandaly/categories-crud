export default function (state = {
  categories: []
}) {
  return {
    categories: state.categories,

    editCategoryClick (index) {
      this.$wire.emit('slideover:set', {
        name: 'livewire:forms.categories.edit-form',
        title: 'Categories',
        data: this.categories[index],
      });
      window.dispatchEvent(new CustomEvent('slideover:show', {
        detail: this.categories[index]
      }));
    },
  }
}
