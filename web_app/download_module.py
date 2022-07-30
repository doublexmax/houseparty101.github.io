from pytube import Playlist


def getNames(link):
	return [video for video in Playlist(link)]
