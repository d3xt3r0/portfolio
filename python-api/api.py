import requests
import bs4
import json

def get_repo_names():

	responce = requests.get("https://github.com/d3xt3r0?tab=repositories")
	soup = bs4.BeautifulSoup(responce.text, 'html.parser')

	repo_list = soup.find_all("a", attrs = {'itemprop':"name codeRepository"})
	repo_names = []

	for i in repo_list:
		repo_names.append(''.join(i.get_text().split()))
	
	return (json.dumps(repo_names))
