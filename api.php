import requests
 
#endpoint for ZIP poisson model
url = 'https://data-service.beatthebookie.blog/auth-test'
 
#create header information containing the API Key
my_headers = {'x-api-key' : 'aKjLqKreBca2ZRa26C3K374WYT6rgxD41KkkKjfm'}
 
#Call HTTP get method for endpoint and provide header information
response = requests.get(url, headers=my_headers)
 
#print response
print(response.content)
