<?php
use Phalcon\Http\Response;

class NoticeController extends \Phalcon\Mvc\Controller {

	// GET http://localhost/notice-phalcon/notice/list
	public function listAction() {
		$query = "SELECT * FROM Notice ORDER BY title";
		$notice = $this->modelsManager->executeQuery($query);
		$data = [];
		foreach ($notice as $noti) {
			$data[] = [
				'id' => $noti->id,
				'title' => $noti->title,
				'description' => $noti->description,
				'author' => $noti->author,
				'created_date' => $noti->created_date,
			];
		}
		echo json_encode($data);
	}
	// GET http://localhost/notice-phalcon/notice/search
	public function searchAction($title) {
		$query = "SELECT * FROM Notice WHERE title LIKE :title: ORDER BY title";
		$notice = $this->modelsManager->executeQuery(
			$query,
			[
				'title' => '%' . $title . '%',

			]
		);
		$data = ['status' => 'NOT-FOUND'];
		foreach ($notice as $noti) {
			$data[] = [
				'id' => $noti->id,
				'title' => $noti->title,
				'description' => $noti->description,
				'author' => $noti->author,
			];
		}
		echo json_encode($data);
	}
	// GET Retrieves notices based on primary key
	public function readoneAction($id) {
		$query = 'SELECT * FROM Notice WHERE id = :id:';
		$notice = $this->modelsManager->executeQuery(
			$query,
			[
				'id' => $id,
			]
		)->getFirst();
		// Create a response
		$response = new Response();

		if ($notice === false) {
			$response->setJsonContent(
				[
					'status' => 'NOT-FOUND',
				]
			);
		} else {
			$response->setJsonContent(
				[
					'status' => 'FOUND',
					'data' => [
						'id' => $notice->id,
						'title' => $notice->title,
						'description' => $notice->description,
						'author' => $notice->author,
						'created_date' => $notice->created_date,
					],
				]
			);
		}
		return $response;
	}
	// POST http://localhost/notice-phalcon/notice/create
	public function createAction() {
		$notice = $this->request->getJsonRawBody();
		$query = 'INSERT INTO Notice (title, description, author,created_date) VALUES (:title:, :description:, :author:, :created_date:)';
		$status = $this->modelsManager->executeQuery(
			$query,
			[
				'title' => $notice->title,
				'description' => $notice->description,
				'author' => $notice->author,
				'created_date' => "2017-07-19",
			]
		);
		// Create a response
		$response = new Response();

		// Check if the insertion was successful
		if ($status->success() === true) {
			// Change the HTTP status
			$response->setStatusCode(201, 'Created');

			$notice->id = $status->getModel()->id;

			$response->setJsonContent(
				[
					'status' => 'OK',
					'data' => $notice,
				]
			);
		} else {
			// Change the HTTP status
			$response->setStatusCode(409, 'Conflict');

			// Send errors to the client
			$errors = [];

			foreach ($status->getMessages() as $message) {
				$errors[] = $message->getMessage();
			}

			$response->setJsonContent(
				[
					'status' => 'ERROR',
					'messages' => $errors,
				]
			);
		}
		return $response;
	}

	//PUT http://localhost/notice-phalcon/notice/update
	public function updateAction($id) {
		$notice = $this->request->getJsonRawBody();
		$query = "UPDATE Notice SET title = :title:, description = :description:, author = :author: WHERE id = :id:";
		$status = $this->modelsManager->executeQuery($query, [
			'id' => $id,
			'title' => $notice->title,
			'description' => $notice->description,
			'author' => $notice->author, // encrypting
		]);
		// Check if the insertion was successful
		if ($status->success() == true) {
			$this->response->setJsonContent(
				[
					'status' => 'OK', 'message' => 'Notice updated !!',
				]
			);
		} else {
			// Change the HTTP status
			$this->response->setStatusCode(409, "Conflict");
			$errors = [];
			foreach ($status->getMessages() as $message) {
				$errors[] = $message->getMessage();
			}
			$this->response->setJsonContent(
				[
					'status' => 'ERROR',
					'messages' => $errors,
				]
			);
		}
		return $this->response;
	}
	//Delete http://localhost/notice-phalcon/notice/delete
	public function deleteAction($id) {
		$query = 'DELETE FROM Notice WHERE id = :id:';
		$status = $this->modelsManager->executeQuery(
			$query,
			[
				'id' => $id,
			]
		);
		// Create a response
		$response = new Response();
		if ($status->success() === true) {
			$response->setJsonContent(
				[
					'status' => 'OK',
				]
			);
		} else {
			// Change the HTTP status
			$response->setStatusCode(409, 'Conflict');

			$errors = [];

			foreach ($status->getMessages() as $message) {
				$errors[] = $message->getMessage();
			}

			$response->setJsonContent(
				[
					'status' => 'ERROR',
					'messages' => $errors,
				]
			);
		}

		return $response;
	}
	//Delete with the softdelete http://localhost/notice-phalcon/notice/deletesoft
	public function deletesoftAction($id) {
		$query = 'UPDATE Notice SET soft_delete = 1 WHERE id = :id:';
		$status = $this->modelsManager->executeQuery(
			$query,
			[
				'id' => $id,
			]
		);
		// Create a response
		$response = new Response();
		if ($status->success() === true) {
			$response->setJsonContent(
				[
					'status' => 'OK',
				]
			);
		} else {
			// Change the HTTP status
			$response->setStatusCode(409, 'Conflict');

			$errors = [];

			foreach ($status->getMessages() as $message) {
				$errors[] = $message->getMessage();
			}

			$response->setJsonContent(
				[
					'status' => 'ERROR',
					'messages' => $errors,
				]
			);
		}

		return $response;
	}
}
