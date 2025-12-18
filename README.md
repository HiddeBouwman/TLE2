# Ecoreeks
A web application that informs users about nature and the importance of biodiversity.

<a href="https://team5.hr-cmgt-tle2-laravel.nl/"><strong>Open the application page on your web browser</strong></a>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About the Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
  </ol>
</details>


## About the Project
Ecoreeks was developed to encourage users to adopt sustainable behavior in an interactive and motivating way. By combining awareness with playful elements, we demonstrate how small, everyday choices can contribute to a greater positive impact on nature and the environment.
The experience begins each day with a short, accessible fact about a common Dutch animal or plant species. This fact is followed by a dystopian scenario outlining what could happen if nature were not sufficiently protected.
The user is then actively challenged. This is done through a question with four answer options that encourages green thinking, or by completing a clear sustainable task. For tasks, the user can provide evidence, encouraging not only intention but also actual behavior.
By answering a question or completing a task daily, the user builds a streak. Maintaining this streak is a playful way to stay engaged. Rewards are received for achieving the set milestones, providing extra motivation and a sense of progress.
Ecoreeks concludes with a bridge to real impact. Users are given the opportunity to further deepen their engagement by becoming a member or volunteering at Natuurmonumenten. In this way, Ecoreeks connects digital interaction with measurable actions in the real world.

### Built With:
*   [![Laravel][Laravel.com]][Laravel-url]
*   [![Tailwind][TailwindCSS.com]][Tailwind-url]
*   [![JavaScript][JavaScript.com]][JavaScript-url]

## Getting Started

To get a local copy up and running, follow the steps below.

### Prerequisites

Make sure you have the following software installed before you start:
*   **PHP:** Version 8.2 or higher.
*   **Composer:** For managing PHP dependencies. If you don't have Composer yet, follow the [Composer installation instructions](https://getcomposer.org/download/).
*   **Node.js and npm:** For managing front-end dependencies. Download this from the [official Node.js website](https://nodejs.org/).
*   **Git:** For version control. Download this from the [official Git website](https://git-scm.com/).

### Installation

1.  **Clone the repository**
    Open a terminal and navigate to the directory where you want to store the project. Then clone the repository with the following command:
    ```sh
    git clone https://github.com/HiddeBouwman/TLE2.git
    cd TLE2
    ```

2.  **Install PHP dependencies**
    Run the following command to install all necessary PHP packages:
    ```sh
    composer install
    ```

3.  **Install front-end dependencies**
    Install the necessary JavaScript packages with npm:
    ```sh
    npm install
    ```

4.  **Generate the application key**
    Every Laravel application needs a unique key to secure sessions and other encrypted data.
    ```sh
    php artisan key:generate
    ```

5.  **Run the database migrations and seeders**
    This command builds the database structure (tables and columns) and fills the database with initial data needed to use the application.
    ```sh
    php artisan migrate --seed
    ```

## Database logic
We've provided an ERD of how our database is structured.

```mermaid
erDiagram
    users {
        int id PK
        string name
        string email UK
        timestamp email_verified_at
        string password
        string remember_token
        bool role
        int streak_counter
        timestamp created_at
        timestamp updated_at
    }
    password_reset_tokens {
        string email PK
        string token
        timestamp created_at
    }
    sessions {
        string id PK
        int user_id FK
        string ip_address
        text user_agent
        longtext payload
        int last_activity
    }
    tasks {
        int id PK
        text question
        text assignment
        timestamp created_at
        timestamp updated_at
    }
    answers {
        int id PK
        text option
        bool correct_option
        string image
        int task_id FK
        timestamp created_at
        timestamp updated_at
    }
    task_user {
        int id PK
        int task_id FK
        int user_id FK
        datetime date
        timestamp created_at
        timestamp updated_at
    }
    facts {
        int id PK
        string name
        text description
        text scenario
        string image
        string image_scenario
        int task_id FK
        timestamp created_at
        timestamp updated_at
    }
    rewards {
        int id PK
        text description
        timestamp created_at
        timestamp updated_at
    }
    reward_user {
        int id PK
        int user_id FK
        int reward_id FK
        timestamp created_at
        timestamp updated_at
    }
    explanations {
        int id PK
        int answer_id FK
        text description
        text conclusion
        timestamp created_at
        timestamp updated_at
    }
    cache {
        string key PK
        mediumtext value
        int expiration
    }
    cache_locks {
        string key PK
        string owner
        int expiration
    }
    jobs {
        int id PK
        string queue
        longtext payload
        tinyint attempts
        int reserved_at
        int available_at
        int created_at
    }
    job_batches {
        string id PK
        string name
        int total_jobs
        int pending_jobs
        int failed_jobs
        longtext failed_job_ids
        mediumtext options
        int cancelled_at
        int created_at
        int finished_at
    }
    failed_jobs {
        int id PK
        string uuid UK
        text connection
        text queue
        longtext payload
        longtext exception
        timestamp failed_at
    }
    users ||--o{ sessions : "has many"
    users ||--o{ task_user : "belongs to many"
    users ||--o{ reward_user : "belongs to many"
    users ||--|| password_reset_tokens : "has one (via email)"
    tasks ||--o{ answers : "has many"
    tasks ||--o{ task_user : "belongs to many"
    tasks ||--o{ facts : "has many"
    answers ||--o{ explanations : "has many"
    rewards ||--o{ reward_user : "belongs to many"
    task_user }o--|| tasks : ""
    task_user }o--|| users : ""
    reward_user }o--|| rewards : ""
    reward_user }o--|| users : ""
    explanations }o--|| answers : ""
    facts }o--|| tasks : ""
    sessions }o--|| users : ""
    password_reset_tokens ||--|| users : ""
```

<!-- USAGE EXAMPLES -->
## Usage

To start the development server:
```sh
php artisan serve
```

To compile and watch the front-end assets for changes:
```sh
composer run dev
```
The application should now be available at `http://127.0.0.1:8000`.

if the `composer run dev` command line gives errors, try the following line:
```sh
php -S 127.0.0.1:8000 -t public
```


See the [backlog](https://github.com/users/HiddeBouwman/projects/1) for a full list of proposed features (and known issues).


## Edge cases
- When the application runs out of facts or any of the accompanying data, the whole site might shut down, and post a Laravel error log. Different per page.

## Contributing
If you have a suggestion to improve this project, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".


<!-- MARKDOWN LINKS & IMAGES -->
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[TailwindCSS.com]: https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwind-url]: https://tailwindcss.com
[JavaScript.com]: https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black
[JavaScript-url]: https://developer.mozilla.org/en-US/docs/Web/JavaScript
