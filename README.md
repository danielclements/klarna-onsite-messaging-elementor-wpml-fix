# klarna-onsite-messaging-elementor-wpml-fix
Quick work around to get Klarna working with Woo commerce, Elementor and WPML with support for multiple currencies / languages

### Step 1
 add the code from klarna-fix.php to a new snippet, then set the snippet to only run on the front end as shown below.

Remeber to replace the data in the array with your WPML languae codes as the key(Left), and your klarna locale code as the value(right)

![Snippet Settings](https://raw.githubusercontent.com/danielclements/klarna-onsite-messaging-elementor-wpml-fix/main/images/WhatsApp%20Image%202023-05-23%20at%2014.39.59.jpeg)


### Step 2
Add A Elementor shortcode block
![Shortcode Block](https://raw.githubusercontent.com/danielclements/klarna-onsite-messaging-elementor-wpml-fix/main/images/WhatsApp%20Image%202023-05-23%20at%2014.39.14.jpeg)

### Step 3
Add [kshort] as the shortcode and then publish
![Shortcode](https://raw.githubusercontent.com/danielclements/klarna-onsite-messaging-elementor-wpml-fix/main/images/WhatsApp%20Image%202023-05-23%20at%2014.39.14%20(1).jpeg)
