<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buat Account Baru!</title>
  </head>
  <body>
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
        @csrf
      <label for="firstName">First name:</label><br /><br />
      <input type="text" id="firstName" name="firstName" /><br /><br />

      <label for="lastName">Last name:</label><br /><br />
      <input type="text" id="lastName" name="lastName" /><br /><br />

      Gender:<br /><br />
      <input type="radio" id="male" name="gender" value="Male" />
      <label for="male">Male</label><br />

      <input type="radio" id="female" name="gender" value="Female" />
      <label for="female">Female</label><br />

      <input type="radio" id="other" name="gender" value="Other" />
      <label for="other">Other</label><br /><br />

      <label for="nationality">Nationality:</label><br /><br />
      <select id="nationality" name="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Other">Other</option></select
      ><br /><br />

      Language Spoken:<br /><br />

      <input
        type="checkbox"
        id="indonesia"
        name="language"
        value="Bahasa Indonesia"
      />
      <label for="indonesia">Bahasa Indonesia</label><br />

      <input type="checkbox" id="english" name="language" value="English" />
      <label for="english">English</label><br />

      <input type="checkbox" id="otherLanguage" name="language" value="Other" />
      <label for="otherLanguage">Other</label><br /><br />

      <label for="bio">Bio:</label><br /><br />
      <textarea id="bio" name="bio" rows="7" cols="22"></textarea><br />

      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
