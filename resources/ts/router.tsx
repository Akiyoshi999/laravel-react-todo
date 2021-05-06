import React from 'react'
import { BrowserRouter, Link, Route, Switch } from 'react-router-dom'
import HelpPage from './pages/help/index'
import LoginPage from './pages/login/index'
import TaskPage from './pages/tasks/index'

export default function App() {
    return (
        <BrowserRouter>
            <div>
                <header className="global-head">
                    <ul>
                        <li>
                            <Link to="/">ホーム</Link>
                        </li>
                        <li>
                            <Link to="/help">ヘルプ</Link>
                        </li>
                        <li>
                            <Link to="/login">ログイン</Link>
                        </li>
                        <li>
                            <span>ログアウト</span>
                        </li>
                    </ul>
                </header>
                <nav>
                    <ul>
                        <li>
                            <Link to="/">ホーム</Link>
                        </li>
                        <li>
                            <Link to="/help">ヘルプ</Link>
                        </li>
                        <li>
                            <Link to="/login">ログイン</Link>
                        </li>
                    </ul>
                </nav>

                {/* A <Switch> looks through its children <Route>s and
              renders the first one that matches the current URL. */}
                <Switch>
                    <Route path="/help">
                        <HelpPage />
                    </Route>
                    <Route path="/login">
                        <LoginPage />
                    </Route>
                    <Route path="/">
                        <TaskPage />
                    </Route>
                </Switch>
            </div>
        </BrowserRouter>
    )
}
