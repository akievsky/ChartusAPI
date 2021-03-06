<?php
namespace chartus\api;
/**
 * ApiInterface
 *
 * @author f0t0n
 */
interface ApiInterface {
	const ACTION_AUTHENTICATE = 'getAuthToken';
	const ACTION_TEST = 'test';
	const ACTION_GET_MY_BOOKS_COUNT = 'getMyBooksCount';
	const ACTION_GET_MY_BOOKS = 'getMyBooks';
	const ACTION_SEARCH_BOOKS_COUNT = 'searchBooksCount';
	const ACTION_SEARCH_BOOKS = 'searchBooks';
	const ACTION_GET_BOOKS_COUNT = 'getBooksCount';
	const ACTION_GET_BOOKS = 'getBooks';
	const ACTION_GET_BOOK = 'getBook';
	const ACTION_GET_CHAPTERS_COUNT = 'getChaptersCount';
	const ACTION_GET_CHAPTERS = 'getChapters';
	const ACTION_GET_CHAPTER = 'getChapter';
	const ACTION_GET_SECTIONS_COUNT = 'getSectionsCount';
	const ACTION_GET_SECTIONS = 'getSections';
	const ACTION_GET_SECTION = 'getSection';
}