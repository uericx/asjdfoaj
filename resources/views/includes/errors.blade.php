
<ul v-if="errors && errors.length">
  <li v-for="error of errors">@{{error.message}}</li>
</ul>