# Workflow Chart for Python Based Web Application Using Django


#### 1. User request: The user sends a request to the web server which contains the URI of the web application.

#### 2. URL Routing: Once the request has been received by the web server, Django handles the request by matching the given URL to a URL pattern in the urls.py file. This file contains a list of all the URLs that are mapped to the Django application.

#### 3. View: If a match is found in the urls.py file, Django calls the associated view function. The view function is responsible for processing the request and returning a response.

#### 4. Model: If the view needs to fetch data from the database, it calls the appropriate model. The model is responsible for interacting with the database and retrieving the requested data.

#### 5. Template: The view then renders the data retrieved from the model in a template. The template is a HTML file which contains the HTML code necessary to render the response.

#### 6. Response: Once the template has been rendered, the view returns the response to the user.


![python,Django workflow](https://user-images.githubusercontent.com/91128089/213729980-08b4d26c-d1f7-4318-97c6-02639a10eb69.png)
