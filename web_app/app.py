import web
from download_module import getNames

render = web.template.render('templates/')

urls = (
	'/download', 'download',
	'/(.*)', 'hello',
)

app = web.application(urls, globals())

class hello:
	def GET(self,name=None):
		return render.index(name)

class download:
	def GET(self):
		return render.download()

	def POST(self):
		val = web.input().link
		print(web.input(),val)
		#return render.videonames(getNames(str(form.d.link)))
		return getNames(val)

if __name__ == "__main__":
    app.run()
